@extends('layouts.master')

@section('title')
    @if (isset($_GET['url']))
        | {{ $_GET['url'] }}
    @endif
@endsection

@section('content')

    @php($count = 1)
    
    @for ($i = 0; $i < $exerciseCount; $i++)
        <a name="{{ $count }}"><a>
        
        @if ($i != 0)
            <div class="pt-5"></div>
        @endif

        <div class="row">
            <div class="col-md-8 offset-md-2">
                {{-- Card --}}
                <div class="card">
                    {{-- Card Header --}}
                    <div class="card-header my-0 py-1">
                        <div class="h5 text-muted m-0 p-0">
                            @if ($count < 10)    
                                #0{{ $count }}
                            @else
                                #{{ $count }}
                            @endif
                        </div>
                        <hr class="mt-1 mb-2">
                        <div class="h5 m-0 pb-2">
                            @if ($exercises[$i])
                                {{ $exercises[$i] }}
                            @else
                                <div class="text-danger">
                                    No exercise found.
                                </div>
                            @endif
                        </div>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="container row">
                            @if (!empty($queries[$i]))
                                @if (!empty($rows[$i]))
                                    <table class="table table-sm table-striped table-hover text-center">
                                        <thead class="thead-dark">
                                            <tr>
                                                @foreach ($tableHeads[$i] as $tableHead)
                                                    <th>{{ $tableHead }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($rows[$i] as $row)
                                                <tr>
                                                    @foreach ($row as $item)
                                                        <td>{{ $item }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                @else
                                    <div class="text-danger">
                                        Can't get any result. Possible error:
                                        <ul>
                                            <li>Query without any results <strong>(most recent)</strong></li>
                                            <li>Wrong or missing query</li>
                                            <li>Wrong or missing database</li>
                                        </ul>
                                        Please check you input inside the <strong>exercises.json</strong> file.
                                    </div>
                                @endif

                            @else
                                <div class="text-danger">
                                    No query found.
                                    <br>
                                    Please check you input inside the <strong>exercises.json</strong> file.
                                </div>
                            @endif
                        </div>
                        
                        <div class="my-4"></div>

                    </div>
                    {{-- Card Footer --}}
                    @if ($queries[$i])
                        <div class="card-footer pt-1 pb-1">
                            <small class="text-muted">
                                {{ $queries[$i] }}
                            </small>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        
        @php ($count++)
        
    @endfor
        
        <div class="mb-5"></div>

@endsection
