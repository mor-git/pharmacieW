<div>
    <a href="{{ url('/') }}"><button>Accueil</button></a>
</div><br><br><br>
<div>
    <form method="post" action="{{ url('/storeRegion')}}">
        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token" />
        <label>Ajouter un Region</label><br><br>
        <input type="text" placeholder="Name" name="name"><br><br>
        <button >Valider</button>
    </form>
</div>
<div>
    @foreach($regions as $region)
        <p>{{ $region->name }}<p>
    @endforeach
</div>