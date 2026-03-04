
(function () {
    const INACTIVITY_LIMIT = 15 * 60 * 1000;
    let inactivityTimer;

    const logoutUser = () => {
        alert("Sessione scaduta per inattività.");
        window.location.href = JS_LOGOUT_URL;
    };

    const resetTimer = () => {
        clearTimeout(inactivityTimer);
        inactivityTimer = setTimeout(logoutUser, INACTIVITY_LIMIT);
    };

    const activityEvents = ['mousedown', 'mousemove', 'keypress', 'scroll', 'touchstart', 'click'];
    activityEvents.forEach(eventName => {
        window.addEventListener(eventName, resetTimer, true);
    });

    resetTimer();
})();