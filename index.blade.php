@extends('base')

@section('body')
    <?php
    use \App\Models\Group;
    use \App\Models\Item;
    $groups = Group::all();
    $items = Item::all();
    ?>
    <h3>Групи</h3>
    @foreach($groups as $group)
        <a href="/DB_lab/public/group/{{$group->id}}">{{$group->name}}</a>
    @endforeach
    <br>
    <h3>Речі</h3>
    @foreach($items as $item)
        <a href="/DB_lab/public/item/{{$item->id}}">{{$item->name}}</a>
    @endforeach
@endsection
