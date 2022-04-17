<div>
    <p>Category</p>
    <select wire:model="categorySelected">
        <option value="" selected></option>
        @foreach($this->categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <p>Subcategory</p>
    <select>
        <option value="" selected></option>
        @foreach($this->subcategories as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
        @endforeach
    </select>
</div>
