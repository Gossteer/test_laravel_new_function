<div class="multi-button"  style="{{$attributes['style2']}}">
    <button class="fas fa-heart" wire:click="{{$attributes['click']}}"></button>
</div>
<a href="{{$attributes['source']}}">
    <div class="container"  style="{{$attributes['style1']}}">
        <div class="mainText" style=" height: 88%;">
            <div readonly class="texForTexareaShow" style="">{{$attributes['text']}}</div>
        </div>
        <div class="articles__footer">
            <p>{{$attributes['tag']}}</p>
            <time title="{{date('H:i:s', strtotime($attributes['data']))}}">{{date('d.m.y', strtotime($attributes['data']))}}</time>
        </div>
    </div>
</a>



