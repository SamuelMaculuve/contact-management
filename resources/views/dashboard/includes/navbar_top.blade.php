<div class=" d-flex w-100 flex-colum align-item-center  justify-content-between return mx-5 ">
    <div>
        <a href="" class="text-dark">
            <h5 class="text-left">
                @if(auth()->check())
                    Olá  {{ Auth::user()->name }}
                @else
                    Olá
                @endif
            </h5>
            <p>{{ date('Y-m-d H:i:s') }}</p>
        </a>
    </div>

</div>
