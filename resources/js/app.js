let menuBtn = document.querySelector(".nav-btn");
let menuPanel = document.querySelector(".main-nav");

menuBtn.addEventListener("click", function() {
	menuPanel.classList.toggle("open");
});

window.addEventListener("click", function(e) {
	if (e.target != menuBtn && !menuBtn.contains(e.target) && e.target != menuPanel && !menuPanel.contains(e.target)) {
		menuPanel.classList.remove("open");
	}
})