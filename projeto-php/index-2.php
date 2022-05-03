<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

        <title>Desafio JQuery</title>
    </head>

    <body>

        <div id="accordion">
            <h3>Section 1</h3>
            <div>
            <p>Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integerut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sitamet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo utodio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.</p>
        </div>

        <h3>Section 2</h3>
        <div>
            <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit ametpurus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitorvelit, faucibus interdum tellus libero ac justo. Vivamus non quam. Insuscipit faucibus urna.</p>
        </div>

        <h3>Section 3</h3>
        <div>
            <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac liberoac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quislacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</p>
            
            <ul>
            <li>List item one</li>
            <li>List item two</li>
            <li>List item three</li>
            </ul>
    </div>

        <h3>Section 4</h3>
        <div>
            <p>Cras dictum. Pellentesque habitant morbi tristique senectus et netuset malesuada fames ac turpis egestas. Vestibulum ante ipsum primis infaucibus orci luctus et ultrices posuere cubilia Curae; Aenean laciniamauris vel est.</p>
            <p>Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.Class aptent taciti sociosqu ad litora torquent per conubia nostra, perinceptos himenaeos.</p>
        </div>
    </div>

    </body>

    <script>
        $( function() {
            $( "#accordion" ).accordion();
        } );
    </script>

</html>