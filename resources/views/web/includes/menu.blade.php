<div class="top-right links">
    <a class="{{ active_route('web.home', 'active') }}" href="{{ nt_route('web.home') }}">Home</a>
    <a class="{{ active_route(['web.menu_01-' . user_lang()], 'active') }}" href="{{ nt_route('web.menu_01-' . user_lang()) }}">Menu 01</a>
    <a class="{{ active_route(['web.shadows-' . user_lang()], 'active') }}" href="{{ nt_route('web.shadows-' . user_lang()) }}">Shadows</a>
</div>