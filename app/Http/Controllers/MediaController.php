<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Services\RemoveFolderService;

class MediaController extends Controller
{
    
    public function index(Request $request){
        if($request->has('id')){
            $thisFolder = Folder::where('id', '=', $request->input('id'))->first();
            if($thisFolder->folder_id == null){
                $result = view('dashboard.media.index', array(
                    'medias' => $thisFolder->getMedia(),
                    'mediaFolders' =>  Folder::where('folder_id', '=', $thisFolder->id)->get(),
                    'thisFolder' => $thisFolder->id,
                    'parentFolder' => 'disable'
                ));
            }else{
                $result = view('dashboard.media.index', array(
                    'medias' => $thisFolder->getMedia(),
                    'mediaFolders' =>  Folder::where('folder_id', '=', $request->input('id'))->get(),
                    'thisFolder' => $request->input('id'),
                    'parentFolder' => $thisFolder['folder_id']
                ));
            }
        }else{
            $rootFolder = Folder::whereNull('folder_id')->first();
            $result = view('dashboard.media.index', array(
                'medias' => $rootFolder->getMedia(),
                'mediaFolders' =>  Folder::where('folder_id', '=', $rootFolder->id)->get(),
                'thisFolder' => $rootFolder->id,
                'parentFolder' => 'disable'
            ));
        }
        return $result;
    }

    public function folderAdd(Request $request){
        $validatedData = $request->validate([
            'thisFolder' => 'required|numeric'
        ]);   
        $mediaFolder = new Folder();
        $mediaFolder->name = 'New Folder';
        if($request->input('thisFolder') !== 'null'){
            $mediaFolder->folder_id = $request->input('thisFolder');
        }
        $mediaFolder->save();
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }

    public function folderUpdate(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:1|max:256',
            'id' => 'required|numeric'
        ]);
        $thisFolder = Folder::where('id', '=', $request->input('id'))->first();
        $thisFolder->name = $request->input('name');
        $thisFolder->save();
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]);
    }

    public function folder(Request $request){
        $validatedData = $request->validate([
            'id' => 'required|numeric',
        ]);
        $thisFolder = Folder::where('id', '=', $request->input('id'))->first();
        return response()->json(array(
            'id' =>         $request->input('id'),
            'name' =>       $thisFolder['name'],
        ));
    }

    public function folderMove(Request $request){
        $validatedData = $request->validate([
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric',
            'folder'        => 'required'
        ]);
        if($request->input('id') != $request->input('folder')){
            $thisFolder = Folder::where('id', '=', $request->input('id'))->first();
            if($request->input('folder') === 'moveUp'){
                $newFolder = Folder::where('id', '=', $thisFolder->folder_id)->first();
                $newFolder = $newFolder->folder_id;
            }else{
                $newFolder = $request->input('folder');
            }
            $thisFolder->folder_id = $newFolder;
            $thisFolder->save();
        }
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }

    public function folderDelete(Request $request){
        $validatedData = $request->validate([
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric'
        ]);
        $removeFolderService = new RemoveFolderService();
        $removeFolderService->folderDelete($request->input('id'), $request->input('thisFolder'));
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }  

    public function fileAdd(Request $request){
        request()->validate([
            'file'          => "required",
            'thisFolder'    => 'required|numeric'
        ]);
        $mediaFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        if($request->hasFile('file')){
            $file = $request->file('file');
            $path = $file->path();
            $oryginalName = $file->getClientOriginalName();
            if(!empty($mediaFolder)){
                $mediaFolder->addMedia($path)->usingFileName( date('YmdHis') . $oryginalName )->usingName($oryginalName)->toMediaCollection();
            }
        }
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }

    public function file(Request $request){
        $validatedData = $request->validate([
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric'
        ]);
        $mediaFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        $media = $mediaFolder->getMedia()->where('id', $request->input('id'))->first();
        return response()->json(array(
            'id' =>         $request->input('id'),
            'name' =>       $media['name'],
            'realName' =>   $media['file_name'],
            'url' =>        $media->getUrl(),
            'mimeType' =>   $media['mime_type'],
            'size' =>       $media['size'],
            'createdAt' =>  substr($media['created_at'], 0, 10) . ' ' . substr($media['created_at'], 11, 19),
            'updatedAt' =>  substr($media['updated_at'], 0, 10) . ' ' . substr($media['updated_at'], 11, 19),
        ));
    }

    public function fileDelete(Request $request){
        $validatedData = $request->validate([
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric'
        ]);
        $mediaFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        $media = $mediaFolder->getMedia()->where('id', $request->input('id'))->first();
        $media->delete();
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }

    public function fileUpdate(Request $request){
        $validatedData = $request->validate([
            'name'          => 'required|min:1|max:256',
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric',
        ]);
        $mediaFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        $media = $mediaFolder->getMedia()->where('id', $request->input('id'))->first();
        $media->name = $request->input('name');
        $media->save();
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]);
    }

    public function fileMove(Request $request){
        $validatedData = $request->validate([
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric',
            'folder'        => 'required'
        ]);
        $oldFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        $media = $oldFolder->getMedia()->where('id', $request->input('id'))->first();
        if($oldFolder->folder_id != NULL && $request->input('folder') === 'moveUp'){
            $newFolder = Folder::where('id', '=', $oldFolder->folder_id)->first();
        }else{
            $newFolder = Folder::where('id', '=', $request->input('folder'))->first();
        }
        $newFolder->addMedia($media->getPath())->usingName($media->name)->toMediaCollection();
        $media->delete();
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }

    public function cropp(Request $request){
        request()->validate([
            'file'          => "required",
            'thisFolder'    => 'required|numeric',
            'id'            => 'required|numeric'
        ]);
        $mediaFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        $media = $mediaFolder->getMedia()->where('id', $request->input('id'))->first();
        if($request->hasFile('file')){
            $file = $request->file('file');
            $path = $file->path();
            $oryginalName = $file->getClientOriginalName();
            if(!empty($mediaFolder)){
                $mediaFolder->addMedia($path)->usingName($media->name)->toMediaCollection();
            }
            $media->delete();
        }
        return response()->json('success');
    }

    public function fileCopy(Request $request){
        $validatedData = $request->validate([
            'id'            => 'required|numeric',
            'thisFolder'    => 'required|numeric',
        ]);
        $oldFolder = Folder::where('id', '=', $request->input('thisFolder'))->first();
        $media = $oldFolder->getMedia()->where('id', $request->input('id'))->first();
        $oldFolder->addMedia($media->getPath())->preservingOriginal()->usingName($media->name)->toMediaCollection();
        return redirect()->route('media.folder.index', ['id' => $request->input('thisFolder')]); 
    }

}
