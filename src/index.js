document.getElementById("app").innerHTML = `
<h1>Twitch Stats</h1>
`

fetch("http://localhost:3000/API/streamers")
.then( res => res.json())
.then( res => console.log(res[0].streamer_name))
//.then( res => document.getElementById("app").innerHTML = res[0].streamer_name)