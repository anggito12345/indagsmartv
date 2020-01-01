
<div class="page has-sidebar-left">
    <div class="container-fluid animatedParent animateOnce">
        <div class="animated fadeInUpShort my-3">
            <div class="row">
                <div class="col-4 pr-0">
                    <label>Kota:</label>
                    <select class="custom-select select2-kota" required>
                    </select>

                    <label>Industri:</label>
                    <select class="custom-select select2-industri" required>
                    </select>
                    
                </div>
                <div class="col-8 pr-0 map-container w-100 mh-100">
                    <div id="map"></div>
                </div>
                 
            </div>
        </div>        
    </div>
</div>
<style>
    
    #map {
        width: 100%; height: 100%;
    }

    .map-container {
        height: 100vh;
    }
</style>

<script>
    var map;
    var markers = [];
    var bounds;

    

    async function initMap() {
        await getLocation((position) => {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: position.coords.latitude, lng: position.coords.longitude},
                zoom: 8
            });
        })

         

        google.maps.Map.prototype.clearOverlays = function() {
            for (var i = 0; i < markers.length; i++ ) {
                markers[i].setMap(null);
            }
            markers.length = 0;
        }
        
    }

    async function getLocation(callback) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(callback);
            if (map == null) {
                callback({
                    coords: {
                        latitude: -6.226998,
                        longitude: 106.832939
                    }
                })
            }
        } else {
            alert("Geolocation is not supported by this browser.")
        }
    }

    $(document).ready(() => {
        $('.select2-kota').select2({
            ajax: {
                url: '<?= base_url('assets/dummies/cities.json'); ?>?_=' + new Date().getTime(),
                dataType: 'json',
                processResults: function (data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: data
                    };
                }
            }
        })

        $('.select2-kota').on('change', function (e) {
            // Do something
            $('.select2-industri').val('')
            $('.select2-industri').trigger('change')
            $.ajax({
                url: '<?= base_url('assets/dummies/industries.json'); ?>?_=' + new Date().getTime(),
                dataType: 'json',
                success: function (data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                    let allIndustries = data.map((d) => {
                        d.text = d.nama
                        return d
                    }).filter((d) => {
                        return d.id_kota == $('.select2-kota').select2('val')
                    })

                    bounds = new google.maps.LatLngBounds();

                    allIndustries.forEach(industri => {
                        var myLatlng = new google.maps.LatLng(industri.latitude,industri.longitude);
                        var newMarker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                        })

                        setInfoWindowIndustri(newMarker, industri) 
                       
                        markers.push(newMarker)
                        bounds.extend(newMarker.position)
                    });

                    map.fitBounds(bounds)
                }
            })
        });

        $('.select2-industri').select2({
            ajax: {
                url: '<?= base_url('assets/dummies/industries.json'); ?>?_=' + new Date().getTime(),
                dataType: 'json',
                processResults: function (data) {
                // Transforms the top-level key of the response object from 'items' to 'results'
                    return {
                        results: data.map((d) => {
                            d.text = d.nama
                            return d
                        }).filter((d) => {
                            return d.id_kota == $('.select2-kota').select2('val')
                        })
                    };
                }
            }
        })

        $('.select2-industri').on('change', function (e) {
            map.clearOverlays()
            if ($('.select2-industri').select2('data').length < 1) {
                return
            }
            
            // Do something
            var myLatlng = new google.maps.LatLng($('.select2-industri').select2('data')[0].latitude,$('.select2-industri').select2('data')[0].longitude);
            var newMarker = new google.maps.Marker({
                position: myLatlng,
                map: map,
            })
            markers.push(newMarker)

            map.setCenter(myLatlng);
            map.setZoom(15);

            setInfoWindowIndustri(newMarker, $('.select2-industri').select2('data')[0])
        });
    })
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVMYWyxLU2CaMjwLSn0IbuF3SW-QAHTuE&callback=initMap"
async defer></script>
