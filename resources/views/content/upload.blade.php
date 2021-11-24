
@section('uploadFile')

<form action="/music_data" method="POST" enctype="multipart/form-data">
@csrf
<div class="upload">
  <h1 class="text-center">
    <img class="logo" src="img/logo2.png" alt="J.H.B Logo">
  </h1>
</div>
<div class="upload">
  <p class="upload-text text-center">Upload your Beats here</p>
  <p class="upload-info">Music file</p>
  <input 
    type="file"
    class="upload-entry"
    name="beatFile" >
  <p class="upload-info">Music Cover</p>
  <input 
    type="file"
    class="upload-entry"
    name="beatCover" >
    <p class="upload-info">Music Title</p>
  <input 
    type="text"
    class="upload-entry-title"
    name="beatstitle"
    placeholder="title" >
</div>
</form>
@show





