<?php
/*
    16.12.2019
    RolesService.php
*/

namespace App\Services;

use App\Models\Folder;

class RemoveFolderService{

    public $foldersArray;

    public function __construct(){
        $this->foldersArray = array();
    }

    public function findFolderChildAnd($thisFolderId, $thisFolder){
        array_push($this->foldersArray, $thisFolderId);
        $childs = Folder::where('folder_id', '=', $thisFolderId)->get();
        if(!empty($childs)){
            foreach($childs as $child){
                $this->findFolderChildAnd($child->id, $thisFolder);
            }
        }
    }

    public function folderDelete($id, $thisFolder){
        $folder = Folder::where('id', '=', $id)->first();
        if($folder->resource != 1 && $folder->folder_id != NULL){
            $this->foldersArray = array();
            $this->findFolderChildAnd($id, $thisFolder);
            foreach($this->foldersArray as $folderId){
                $folder = Folder::where('id', '=', $folderId)->first();
                $folder->delete();
            }
        }

    }

}