// Grab elements
const routeFromSelect = document.getElementById("routeFrom");
const routeToSelect = document.getElementById("routeTo");
const tripDateInput = document.getElementById("tripDate");

// Parse routes data from Blade
const routes = JSON.parse(document.getElementById("routes-data").textContent);

let allowedDays = [];

// Event listeners
routeFromSelect.addEventListener("change", updateDestinations);
routeToSelect.addEventListener("change", updateAllowedDays);
tripDateInput.addEventListener("input", validateDate);

// Update destinations based on selected origin
function updateDestinations() {
    const origin = routeFromSelect.value;
    routeToSelect.innerHTML = '<option value="">Select Destination</option>';
    tripDateInput.value = "";
    tripDateInput.disabled = true;
    allowedDays = [];

    if (!origin) {
        routeToSelect.disabled = true;
        return;
    }

    // Get unique destinations for this origin
    const destinations = routes
        .filter((r) => r.route_from === origin)
        .map((r) => r.route_to)
        .filter((v, i, a) => a.indexOf(v) === i);

    destinations.forEach((dest) => {
        const option = document.createElement("option");
        option.value = dest;
        option.textContent = dest;
        routeToSelect.appendChild(option);
    });

    routeToSelect.disabled = false;
}

// Update allowed days for the selected route
function updateAllowedDays() {
    const origin = routeFromSelect.value;
    const destination = routeToSelect.value;
    tripDateInput.value = "";

    if (!origin || !destination) {
        tripDateInput.disabled = true;
        allowedDays = [];
        return;
    }

    const route = routes.find(
        (r) => r.route_from === origin && r.route_to === destination
    );

    if (!route) {
        alert("No route found. Resetting selection.");
        resetSelection();
        return;
    }

    // Map operating days to numeric days for Date.getDay()
    const dayMap = {
        Sunday: 0,
        Monday: 1,
        Tuesday: 2,
        Wednesday: 3,
        Thursday: 4,
        Friday: 5,
        Saturday: 6,
    };

    allowedDays = JSON.parse(route.operating_days).map((d) => dayMap[d]);
    tripDateInput.disabled = false;
    tripDateInput.min = new Date().toISOString().split("T")[0]; // prevent past dates
}

// Validate selected date
function validateDate() {
    if (!allowedDays.length) return;

    const selectedDate = new Date(this.value);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    // Past date check
    if (selectedDate < today) {
        alert("You cannot select a past date.");
        this.value = "";
        return;
    }

    // Allowed days check
    if (!allowedDays.includes(selectedDate.getDay())) {
        alert("Selected date is not available for this route.");
        this.value = "";
    }
}

// Reset selection
function resetSelection() {
    routeFromSelect.value = "";
    routeToSelect.innerHTML = '<option value="">Select Destination</option>';
    routeToSelect.disabled = true;
    tripDateInput.value = "";
    tripDateInput.disabled = true;
    allowedDays = [];
}
