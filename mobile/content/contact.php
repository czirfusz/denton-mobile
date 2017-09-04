			<script type="text/javascript">

				$("#main").live("pageshow", function() {

                                        if(navigator.geolocation) {

						if ( document.getElementById("map_here") != null )
                                                	initialize(48.192008, 16.340397, '');

                                                //navigator.geolocation.getCurrentPosition(function(position){
                                                        //initialize(position.coords.latitude, position.coords.longitude);
                                                //});

                                        }

                                });

                                function initialize(lat, lng, address) {
                                        var latlng = new google.maps.LatLng(lat, lng);
                                        var mapOptions = {
                                                zoom: 16,
                                                center: latlng,
                                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                        };
                                        var map = new google.maps.Map(document.getElementById("map_here"), mapOptions);

                                        var image = './image/logo_72.png';
                                        var marker = new google.maps.Marker({
                                                position: latlng,
                                                title: address,
                                                icon: image
                                        });

                                        marker.setMap(map);
                                }

                        </script>

                        <div data-role="content" data-theme="a">

				<div data-role="controlgroup" data-type="horizontal">
                                                <a href="javascript:changePage('index.php', 'slide');" class="ui-button-150" data-theme="d" data-role="button" data-icon="arrow-l">Zurück</a>
                                </div>

                                <div id="map_here" style="width:100%; height:280px;">
                                </div>

                        </div>

