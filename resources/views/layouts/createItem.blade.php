<form method="POST" enctype="multipart/form-data" action="{{ route('create.store') }}" class="flex flex-col" >
  @csrf
  <input type="file" name="image" id="" placeholder="image">
  <input type="text" name="title" placeholder="your title">
  <input type="number" name="price" placeholder="precie">
  <input type="text" name="description" placeholder="your description">
  <input type="text" name="size" placeholder="size">
  <input type="text" name="collection_id"  placeholder="collection_id">
  <button class="cursor-pointer"> save data</button>
  </form>
  
  
  
  
  {{-- ignorar esto de momento borrenlo --}}
  
  
  @foreach ($items as $item)
  
    <li href="">{{ $item->title}}</li>
    <li href="">{{ $item->description}}</li>
    <li href="">{{ $item->size}}</li>
    @foreach ( $item->getMedia() as $media )
        <img src="{{ $media->getFullUrl() }}" alt="img">
    @endforeach
  
  @endforeach