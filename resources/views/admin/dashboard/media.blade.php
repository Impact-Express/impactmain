@extends('admin.app')
@section('title', 'Media')
@section('content')
<div class="grid">
    <div id="toolbar"></div>
    <div id="drawer">
        <div class="drawer-content">
            <div id="Dashboard">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
            <div id="Media" class="hidden">
            you're on
            </div>
            <div id="Posts" class="hidden">
                a rock
            </div>
            <div id="Pages" class="hidden">
                floating in space
            </div>
            <div id="Settings" class="hidden">
                Pretty cool huh?
            </div>
        </div>
    </div>
</div>
@endsection

