<html>
  <head></head>
  <body>
    <div id="game"></div>
    <script type="text/javascript" src="src/crafty.js"></script>
    <script>
    	Crafty.init(1900,900, document.getElementById('game'));

    	var gazon = Crafty.e('2D, Canvas, Image')
    	gazon.attr({x:200, y:50, w: 1280, h: 720})
             .image("img/polehd.jpg");


			Crafty.c('player', {
				init: function() {
				  this.requires("2D");
				  this.requires("Canvas");
				  this.requires("Mouse");
				  this.requires("Draggable");
				  this.requires("Image");
				  this.image("img/formbluemin.png");
				}
			});

			Crafty.c('lastname', {
				init: function() {
				  this.requires("2D");
				  this.requires("Canvas");
				  this.requires("Text");
				  this.attr({x:7, y:67});
				  this.textFont({
				  size: '12px',
				  weight: 'bold'
				  });
				}
			});

			Crafty.c('number', {
				init: function() {
				  this.requires("2D");
				  this.requires("Canvas");
				  this.requires("Text");
				  this.attr({x:16, y:20});
				  this.textFont({
				  size: '30px',
				  weight: 'bold'
				  });
				}
			});



			//generate zapas
			for(var i = 0; i<7; i++) {
				Crafty.e('player').attr({x:20, y:i*80});
			}

			Crafty.e('player')
				.attach(Crafty.e('lastname').text('Pogrebnov'))
				.attach(Crafty.e('number').text('14'));




		  		
    </script>
  </body>
</html>