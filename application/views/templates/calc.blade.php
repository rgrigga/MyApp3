{{ render('partials.header') }}
 
<div data-role="page">
 
    <div data-role="header">
        <h1>@yield('title')</h1></div><p> </p>
 

<div data-role="content"><p>    <br>
        @yield('content')       <br></p>
</div>
 
<div data-role="footer">
<p>     @yield('footer')<br></p>
</div>
</div>
 
<p>{{ render('partials.footer') }}</p>