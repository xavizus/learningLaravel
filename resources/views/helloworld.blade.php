@include('partials.header')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('scripts')
    <title>Laravel</title>
</head>
<body>

<div id="app">
<div>
    <h1>test</h1>
    <funtest inline-template
        hello="hello"
        world="world"
    >
    <div>
        <div>
        <button type="button" @click="testprint()">Hello World</button>
        </div>

        <div>@{{ hello }} @{{ world }}</div>
    </div>
    </funtest>  
    </div>
</div>
</body>
</html>

