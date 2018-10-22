<article>
    <header class="mb-2">
        <h3><a href="{{ $url }}">{{ $title }}</a></h3> 
        <div>| {{ $category }}</div>
        <a href="{{ $url }}">
            <img src="https://diegocasillas.com/wp-content/uploads/2018/03/frontend-backend.png" class="img-fluid mt-2 mb-3 border-3 border-main">
        </a>
    </header>
    
    <main class="post-body">{{ $body }}</main>
</article>