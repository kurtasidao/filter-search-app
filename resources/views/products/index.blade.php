<!-- Display search form -->
<form action="{{ route('products.index') }}" method="GET">
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ request('name') }}">
    <br>
    <label for="category">Category:</label>
    <select name="category">
        <option value="">Any</option>
        <option value="category1" {{ request('category') === 'category1' ? 'selected' : '' }}>Category 1</option>
        <option value="category2" {{ request('category') === 'category2' ? 'selected' : '' }}>Category 2</option>
        <!-- Add more categories as needed -->
    </select>
    <br>
    <label for="min_price">Min Price:</label>
    <input type="text" name="min_price" value="{{ request('min_price') }}">
    <br>
    <label for="max_price">Max Price:</label>
    <input type="text" name="max_price" value="{{ request('max_price') }}">
    <br>
    <button type="submit">Search</button>
    
    </form>
    <!-- Display search results -->
    @if ($products->count() > 0)
    <h2>Search Results:</h2>
    <ul>
    @foreach ($products as $product)
    <li>{{ $product->name }} - {{ $product->category }} - ${{ $product->price }}</li>
    @endforeach
    </ul>
    @else
    <p>No matching products found.</p>
    @endif
