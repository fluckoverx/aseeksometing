<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
const countEl = document.getElementById('count');
updateVisitCount();

function updateVisitCount() {
    fetch('https://api.countapi.xyz/update/aseek/stack/?amount=1')
    .then(res => res.json())
    .then(res => {
        countEl.innerHTML = res.value;
    })
}</script>
<!-- end Simple Custom CSS and JS -->
