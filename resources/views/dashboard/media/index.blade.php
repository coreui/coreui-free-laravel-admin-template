@extends('dashboard.base')

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Media</h4></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div style="float:left;">
                            @if($parentFolder !== 'disable')
                                <a class="btn btn-primary mt-2" href="{{ route('media.folder.index', [ 'id' => $parentFolder ]) }}">
                                    <i class="cil-level-up"></i>
                                    back
                                </a>
                            @endif
                            <a class="btn btn-primary mt-2" href="{{ route('media.folder.add', [ 'thisFolder' => $thisFolder ]) }}">
                                <i class="cil-plus"></i> 
                                <i class="cil-folder"></i>
                                New folder
                            </a>
                        </div>
                        <div style="float:left;">
                            <form method="POST" action="{{ route('media.file.add') }}" enctype="multipart/form-data" id="file-file-form">
                                @csrf
                                <input type="hidden" name="thisFolder" value="{{ $thisFolder }}" id="this-folder-id"/> 
                                <label class="btn btn-primary mt-2 ml-1">
                                    <i class="cil-plus"></i>
                                    <i class="cil-file"></i>
                                    New file <input type="file" name="file" id="file-file-input" hidden>
                                </label> 
                                
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <table class="table table-striped table-bordered datatable">
                            <tbody>
                                @foreach($mediaFolders as $mediaFolder)
                                    <tr>
                                        <td>
                                            <a href="{{ route('media.folder.index', [ 'id' => $mediaFolder->id ]) }}">
                                                <i class="cil-folder"></i> 
                                                {{ $mediaFolder->name }}
                                            </a>
                                        </td>
                                        <td>
                                            <button
                                                class="btn btn-primary file-change-folder-name"
                                                atr="{{ $mediaFolder->id }}"
                                            >
                                                Rename
                                            </button>
                                        </td>
                                        <td>
                                            <button 
                                                class="btn btn-primary file-move-folder"
                                                atr="{{ $mediaFolder->id }}"
                                            >
                                                Move
                                            </button>
                                        </td>
                                        <td>
                                            <!--
                                            <a 
                                                class="btn btn-danger" 
                                                href="{{ route('media.folder.delete', ['id' => $mediaFolder->id, 'thisFolder' => $thisFolder]) }}"
                                            >
                                                Delete
                                            </a>
                                            -->
                                            <button 
                                                class="btn btn-danger file-delete-folder"
                                                atr="{{ $mediaFolder->id }}"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($medias as $media)
                                    <tr>
                                        <td class="click-file" atr="{{ $media->id }}">
                                            <i class="cil-file"></i> 
                                            {{ $media->name }}
                                        </td>
                                        <td>
                                            <button
                                                class="btn btn-primary file-change-file-name"
                                                atr="{{ $media->id }}"
                                            >
                                                Rename
                                            </button>
                                        </td>
                                        <td>
                                            <button 
                                                class="btn btn-primary file-move-file"
                                                atr="{{ $media->id }}"
                                            >
                                                Move
                                            </button>
                                        </td>
                                        <td>
                                            <a 
                                                class="btn btn-danger" 
                                                href="{{ route('media.file.delete', ['id' => $media->id, 'thisFolder' => $thisFolder]) }}"
                                            >
                                                Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-4">

                    <div class="card border-primary" id="file-move-folder">
                            <div class="card-header">
                                <h4>Move folder</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('media.folder.move') }}">
                                    @csrf
                                    <input type="hidden" name="thisFolder" value="{{ $thisFolder }}">
                                    <input type="hidden" name="id" value="" id="file-move-folder-id">
                                    <table class="table table-striped table-bordered">
                                        @if($parentFolder !== 'disable')
                                            <tr>
                                                <td>
                                                    <input type="radio" name="folder" value="moveUp">
                                                </td>
                                                <td>
                                                    Move up
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach($mediaFolders as $mediaFolder)
                                            <tr>
                                                <td>
                                                    <input 
                                                        type="radio" 
                                                        name="folder" 
                                                        value="{{ $mediaFolder->id }}"
                                                        class="file-move-folder-radio"
                                                    >
                                                </td>
                                                <td>
                                                    {{ $mediaFolder->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-move-folder-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="card border-primary" id="file-move-file">
                            <div class="card-header">
                                <h4>Move file</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('media.file.move') }}">
                                    @csrf
                                    <input type="hidden" name="thisFolder" value="{{ $thisFolder }}">
                                    <input type="hidden" name="id" value="" id="file-move-file-id">
                                    <table class="table table-striped table-bordered">
                                        @if($parentFolder !== 'disable')
                                            <tr>
                                                <td>
                                                    <input type="radio" name="folder" value="moveUp">
                                                </td>
                                                <td>
                                                    Move up
                                                </td>
                                            </tr>
                                        @endif
                                        @foreach($mediaFolders as $mediaFolder)
                                            <tr>
                                                <td>
                                                    <input type="radio" name="folder" value="{{ $mediaFolder->id }}">
                                                </td>
                                                <td>
                                                    {{ $mediaFolder->name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-move-file-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="card border-primary" id="file-rename-file-card">
                            <div class="card-header">
                                <h4>Rename file</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('media.file.update') }}">
                                    @csrf
                                    <input type="hidden" name="thisFolder" value="{{ $thisFolder }}">
                                    <input type="hidden" name="id" value="" id="file-rename-file-id">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="file-rename-file-name"
                                        class="form-control"
                                    >
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-rename-file-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>
                        <div class="card border-primary" id="file-rename-folder-card">
                            <div class="card-header">
                                <h4>Rename folder</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="{{ route('media.folder.update') }}">
                                    @csrf
                                    <input type="hidden" name="thisFolder" value="{{ $thisFolder }}">
                                    <input type="hidden" name="id" value="" id="file-rename-folder-id">
                                    <input 
                                        type="text" 
                                        name="name" 
                                        id="file-rename-folder-name"
                                        class="form-control"
                                    >
                                    <button type="submit" class="btn btn-primary mt-3">Save</button>
                                    <button type="button" class="btn btn-primary mt-3" id="file-rename-folder-cancel">Cancel</button>
                                </form>
                            </div>
                        </div>

                        <div class="card border-primary" id="file-info-card">
                            <div class="card-header">
                                <h4>File info</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td>
                                            Name
                                        </td>
                                        <td id="file-div-name">
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Real Name
                                        </td>
                                        <td id="file-div-real-name">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            URL
                                        </td>
                                        <td id="file-div-url">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            mime type
                                        </td>
                                        <td id="file-div-mime-type">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Size
                                        </td>
                                        <td id="file-div-size">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Created at
                                        </td>
                                        <td id="file-div-created-at">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Updated at
                                        </td>
                                        <td id="file-div-updated-at">

                                        </td>
                                    </tr>
                                </table> 
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="remove-folder-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete folder</h4>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                    <p>If you delete a folder, all subfolders and files will also be deleted</p>
                                </div>
                                <div class="modal-footer">
                                    <form action="{{ route('media.folder.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="thisFolder" value="{{ $thisFolder }}">
                                        <input type="hidden" name="id" value="" id="file-delete-folder-id">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content-->
                        </div>
                        <!-- /.modal-dialog-->
                    </div>


                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')
<script src="{{ asset('js/axios.min.js') }}"></script> 
<script>

    var self = this;

    this.removeFolderModal = new coreui.Modal(document.getElementById('remove-folder-modal'))



    this.showCard = function( showThisCard ){
        document.getElementById('file-rename-file-card').classList.add('d-none')
        document.getElementById('file-info-card').classList.add('d-none')
        document.getElementById('file-rename-folder-card').classList.add('d-none')
        document.getElementById('file-move-file').classList.add('d-none')
        document.getElementById('file-move-folder').classList.add('d-none')
        document.getElementById( showThisCard ).classList.remove('d-none')
    }

    this.buildFileInfoCard = function(data){
        document.getElementById("file-div-name").innerText = data['name']
        document.getElementById("file-div-real-name").innerText = data['realName']
        document.getElementById("file-div-url").innerText = data['url']
        document.getElementById("file-div-mime-type").innerText = data['mimeType']
        document.getElementById("file-div-size").innerText = data['size']
        document.getElementById("file-div-created-at").innerText = data['createdAt']
        document.getElementById("file-div-updated-at").innerText = data['updatedAt']
    }

    this.buildFileRenameFileCard = function(data){
        document.getElementById("file-rename-file-id").value = data['id']
        document.getElementById("file-rename-file-name").value = data['name']
    }

    this.buildFileRenameFolderCard = function(data){
        document.getElementById("file-rename-folder-id").value = data['id']
        document.getElementById("file-rename-folder-name").value = data['name']
    }

    this.clickFile = function(e){
        axios.get( '/media/file?id=' + e.target.getAttribute("atr") + '&thisFolder=' + document.getElementById('this-folder-id').value )
        .then(function (response) {
            self.buildFileInfoCard(response.data)
            self.showCard('file-info-card')
        })
        .catch(function (error) {
            console.log(error)
        })
    }

    this.fileChangeName = function(e){
        axios.get( '/media/file?id=' + e.target.getAttribute("atr") + '&thisFolder=' + document.getElementById('this-folder-id').value )
        .then(function (response) {
            self.buildFileInfoCard(response.data) //must be
            self.buildFileRenameFileCard(response.data)
            self.showCard('file-rename-file-card')
        })
        .catch(function (error) {
            console.log(error)
        })
    }

    this.folderChangeName = function(e){
        axios.get( '/media/folder?id=' + e.target.getAttribute("atr") )
        .then(function (response) {
            self.buildFileRenameFolderCard(response.data)
            self.showCard('file-rename-folder-card')
        })
        .catch(function (error) {
            console.log(error)
        })
    }

    this.moveFile = function(e){
        document.getElementById('file-move-file-id').value = e.target.getAttribute('atr')
        self.showCard('file-move-file')
    }

    this.moveFolder = function(e){
        document.getElementById('file-move-folder-id').value = e.target.getAttribute('atr')
        let radios = document.getElementsByClassName('file-move-folder-radio');
        for(let i =0; i<radios.length; i++){
            if(radios[i].value === e.target.getAttribute('atr')){
                radios[i].disabled = true;
            }else{
                radios[i].disabled = false;
            }
        }
        self.showCard('file-move-folder')
    }

    this.deleteFolder = function(e){
        document.getElementById('file-delete-folder-id').value = e.target.getAttribute('atr')
        self.removeFolderModal.show();
    }

    this.renameFileCancel = function(){
        self.showCard('file-info-card')
    }

    this.renameFolderCancel = function(){
        self.showCard('file-info-card')
    }

    this.moveFileCancel = function(){
        self.showCard('file-info-card')
    }

    this.moveFolderCancel = function(){
        self.showCard('file-info-card')
    }

    let files = document.getElementsByClassName("click-file")
    for(let i = 0; i < files.length; i++){
        files[i].addEventListener('click',  this.clickFile )
    }
    let renameButtons = document.getElementsByClassName('file-change-file-name')
    for(let i = 0; i< renameButtons.length; i++){
        renameButtons[i].addEventListener('click', this.fileChangeName )
    }
    renameButtons = document.getElementsByClassName('file-change-folder-name')
    for(let i=0; i<renameButtons.length; i++){
        renameButtons[i].addEventListener('click', this.folderChangeName )
    }
    let moveButtons = document.getElementsByClassName('file-move-file')
    for(let i=0; i<moveButtons.length; i++){
        moveButtons[i].addEventListener('click', this.moveFile )
    }
    moveButtons = document.getElementsByClassName('file-move-folder')
    for(let i=0; i<moveButtons.length; i++){
        moveButtons[i].addEventListener('click', this.moveFolder )
    }
    let deleteButtons = document.getElementsByClassName('file-delete-folder')
    for(let i=0; i<deleteButtons.length; i++){
        deleteButtons[i].addEventListener('click', this.deleteFolder )
    }   

    document.getElementById('file-rename-file-cancel').addEventListener('click', this.renameFileCancel)
    document.getElementById('file-rename-folder-cancel').addEventListener('click', this.renameFolderCancel)
    document.getElementById('file-move-file-cancel').addEventListener('click', this.moveFileCancel)
    document.getElementById('file-move-folder-cancel').addEventListener('click', this.moveFolderCancel)

    document.getElementById('file-file-input').onchange = function() {
        document.getElementById('file-file-form').submit();
    };

    self.showCard('file-info-card')




</script>


@endsection