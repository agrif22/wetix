<nav class="nav flex-column">
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    @foreach ($list as $row)
    <a href="#" class="nav-link {{ $isActive($row['label']) ? 'active';'' }}">
        {{ $row['label'] }}
    </a>
        
    @endforeach
</nav>