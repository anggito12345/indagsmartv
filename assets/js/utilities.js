function setInfoWindowIndustri(marker, industri) {
    var infowindow = new google.maps.InfoWindow({
            content: `
            <table>
                <tr>
                    <td> 
                        <img src='${industri.foto_gedung}' width='50' height='50'/>
                    </td>
                    <td class='pl-2'>
                        <label>
                            ${industri.nama}
                        </label>
                        <br>
                        ${industri.alamat}
                        <br>
                        Telp: ${industri.no_telp}
                    </td>
                </tr>
            </table>`
            
        }); 

    marker.addListener('click', function() {infowindow.open(map, marker); });
}

function setInfoWindowEresleting(marker, industri) {
    var infowindow = new google.maps.InfoWindow({
            content: `
            <table>
                <tr>
                    <td> 
                        <img src='${industri.foto_gedung}' width='50' height='50'/>
                    </td>
                    <td class='pl-2'>
                        <label>
                            ${industri.nama}
                        </label>
                        <br>
                        ${industri.alamat}
                        <br>
                        Telp: ${industri.no_telp}
						<br>
                        Jumlah Mesin: ${industri.jumlah_mesin}
                    </td>
                </tr>
            </table>`
            
        }); 

    marker.addListener('click', function() {infowindow.open(map, marker); });
}