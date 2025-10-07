async function addCategory(name) {
    const response = await fetch('../actions/add_category_action.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ name })
    });
    const data = await response.json();
    alert(data.message);
}
