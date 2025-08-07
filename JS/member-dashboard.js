document.addEventListener('DOMContentLoaded', function() {
    const getPlanBtn = document.getElementById('getPlanBtn');
    const goalSelector = document.getElementById('goalSelector');
    const planResult = document.getElementById('planResult');

    if (getPlanBtn) {
        getPlanBtn.addEventListener('click', function() {
            const selectedGoal = goalSelector.value;
            let recommendedPlan = '';

            if (selectedGoal === 'lose') {
                recommendedPlan = 'We recommend our STANDARD plan for its nutrition guidance and unlimited training sessions.';
            } else if (selectedGoal === 'gain') {
                recommendedPlan = 'Our PREMIUM plan with 24/7 access and expert guidance is perfect for gaining weight effectively.';
            } else if (selectedGoal === 'strength') {
                recommendedPlan = 'Our BASIC plan gives you full access to our state-of-the-art equipment to build strength.';
            }

            planResult.textContent = recommendedPlan;
        });
    }
});