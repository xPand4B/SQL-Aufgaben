<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
        <div class="container">
            <!-- Brand -->
            <a href="." class="navbar-brand">
                {{ env('APP_NAME') }}
            </a>
        
            <!-- Mobile Menu -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnav" aria-controls="topnav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="topnav">
                <ul class="navbar-nav ml-auto">

                    @if (! is_null($topics) && !empty($topics))
                        @foreach ($topics as $topic)
                            <li class="nav-item">
                                <a href="{{ $topic }}" class="nav-link">
                                    {{ $topic }}
                                </a>
                            </li>
                        @endforeach
                    @endif
    
                    {{-- @foreach ($topics as $topic)
    
                        @if (isset($_GET['url']) && strtolower($_GET['url']) == strtolower($topic))
                            <li class="nav-item active dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $topic }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labeldby="navbarDropdown">
                                    @if (!empty($date))
                                        <div class="dropdown-header pb-0 pt-0">13.11.18</div>
                                        <div class="dropdown-divider"></div>
                                    @endif
    
    
                                    @php ($count = 1)
    
                                    @foreach ($exercises as $exercise)
                                        <a href="#{{ $count }}" class="dropdown-item py-0">
                                            @if ($count < 10)    
                                                #0{{ $count }}
                                            @else
                                                #{{ $count }}
                                            @endif
                                        </a>
                                        @php ($count++)
                                    @endforeach
                                </div>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ $topic }}" class="nav-link">
                                    {{ $topic }}
                                </a>
                            </li>
                        @endif
                    @endforeach --}}
    
                </ul>
            </div>
        </div>
    </nav>
