
<form method="POST" enctype="multipart/form-data" action="{{ route('create.store') }}" class="flex flex-col" >
@csrf
<input type="file" name="image" id="" placeholder="image">
<input type="text" name="title" placeholder="your title">
<input type="text" name="description" placeholder="your description">
<input type="text" name="collection_id"  placeholder="collection_id">
<input type="tdext" name="user_id" placeholder="user_id">
<button class="cursor-pointer"> save data</button>
</form>


{{-- <img src="{{ $images->getFirsMedia()->getUrl() }}" alt=""> --}}

@if (!empty($images) && count($images) > 0)
    <img src="{{ $images[0]->getUrl() }}" alt="">
@endif
