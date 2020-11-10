@foreach ($errors->all() as $error)
    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ $error }}
            </div>


        </div>
    </div>
@endforeach
@if (session('email'))
    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('email') }}
            </div>


        </div>
    </div>
@endif
@if (session('success'))
    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('success') }}
            </div>


        </div>
    </div>
@endif
@if (session('error'))
    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('error') }}
            </div>


        </div>
    </div>
@endif
@if (session('successful'))
    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('successful') }}
            </div>


        </div>
    </div>
@endif

@if (session('status'))

    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('status') }}
            </div>


        </div>
    </div>
@endif
@if (session('message'))

    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('message') }}
            </div>


        </div>
    </div>
@endif
@if (session('phoneNo'))

    <div class="">
        <div class="fixed-top  col-4 pt-3 h-auto ">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('phoneNo') }}
            </div>


        </div>
    </div>
@endif
