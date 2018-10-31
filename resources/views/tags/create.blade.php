<h1>Create a Tag</h1>

<div class="container"> 

{{-- {{!! Form:: open(['action'=>'VenueController@store', 'method'=>'post']) !!}} --}}
<form action="{{ action('TagController@store')}}" method="post">

        @csrf
        
        <div class="form-group">
          {{-- {{ Form::label('title', 'Title') }} --}}
          <label>Name of Tag</label>
          {{-- {{ Form::text('title', '', ['class']) }} --}}
          <input type="text" name="name" class="form-control">
        </div>
        
        {{-- UNIQUE TAG CATEGORIES (VenueType, NighType)--}}
        <div class="form-group">
          <label>Category of the Tag</label> 
          {{-- CONNECT WITH CATEGORIES TABLE  --}}
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $catergory->name }}</option>
          @endforeach
        </div>

        <div class="form-group">
          <label>Features</label>
            @foreach ($features as $feature)
            <input type="checkbox" name="{{ $feature->id }}" value="Bike">{{ $feature->name }}
            @endforeach

        </div>

        {{-- <div class="form-group">
          <label>Features</label>
          <select name="feature_id">
            @foreach ($features as $feature)
            <option value="{{ $feature->id }}">{{ $feature->name }}</option>
            @endforeach            
          </select>
        </div> --}}

        <div class="form-group">
          <label>Attributes</label>
          <select name="attribute_id">
           
            @foreach ($attributes as $attribute)
            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
            @endforeach
          </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>