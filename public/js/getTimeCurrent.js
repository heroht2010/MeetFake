
                            var div = document.getElementById('timeBar');
                            function time() {
                            div.innerHTML = "";
                            var d = new Date();
                            var s = d.getSeconds();
                            var m = d.getMinutes();
                            var h = d.getHours();
                            div.innerHTML = h + ":" + m;
                            }
                            setInterval(time, 1000);
