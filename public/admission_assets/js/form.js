function getUTMParameter(parameterName, defaultValue) {
    let searchParams = new URLSearchParams(window.location.search);
    let value = searchParams.get(parameterName);
    return value !== null ? value : defaultValue;
}

function addHiddenField(form, name, value) {
    let input = document.createElement("input");
    input.type = "hidden";
    input.name = name;
    input.value = value;
    form.appendChild(input);
}

document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById("leadForm");

    let utm_source = getUTMParameter("utm_source", "Campaign");
    addHiddenField(form, "Source", utm_source);

    let utm_keyword = getUTMParameter("utm_keyword", "Campaign");
    addHiddenField(form, "mx_Keyword", utm_keyword);

    let utm_campaign = getUTMParameter("utm_campaign", "Campaign");
    addHiddenField(form, "SourceCampaign", utm_campaign);

    let utm_medium = getUTMParameter("utm_medium", "Campaign");
    addHiddenField(form, "SourceMedium", utm_medium);
});

document.addEventListener("DOMContentLoaded", function () {
    let form = document.getElementById("leadForm2");

    let utm_source = getUTMParameter("utm_source", "Campaign");
    addHiddenField(form, "Source", utm_source);

    let utm_keyword = getUTMParameter("utm_keyword", "Campaign");
    addHiddenField(form, "mx_Keyword", utm_keyword);

    let utm_campaign = getUTMParameter("utm_campaign", "Campaign");
    addHiddenField(form, "SourceCampaign", utm_campaign);

    let utm_medium = getUTMParameter("utm_medium", "Campaign");
    addHiddenField(form, "SourceMedium", utm_medium);
});

document.getElementById('leadForm').addEventListener('submit', function (event) {
    event.preventDefault();

    const submitButtons = document.querySelectorAll('.submitBtn');
    submitButtons.value = "Submitting..."
    submitButtons.disabled = true;

    const formData = new FormData(this);

    const leadData = [];

    const fieldMappings = {
        'firstname': 'FirstName',
        'phone': 'Phone',
        'email': 'EmailAddress',
        'city': 'mx_City',
        'state': 'mx_State',
        'programme': 'mx_Programme',
        'SourceCampaign': 'SourceCampaign',
        'mx_Keyword': 'mx_Keyword',
        'SourceMedium': 'SourceMedium',
        'Source': 'Source',
        'Other_City': 'OtherCity'
    };

    formData.forEach((value, key) => {
        const attribute = fieldMappings[key];

        if (attribute) {
            leadData.push({
                Attribute: attribute,
                Value: value
            });
        }
    });

    fetch('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r07af9ca93e52abb5cc5c8b841e22bb19&secretKey=5bfd47820e035b5d70f5a9f9c217bd6048f8e88e', {
        method: 'POST',
        body: JSON.stringify(leadData),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            window.location.href = "https://www.msu.edu.in/thank-you";
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Error submitting lead");
        });
});

document.getElementById('leadForm2').addEventListener('submit', function (event) {
    event.preventDefault();

    const submitButtons = document.querySelectorAll('.submitBtn');
    submitButtons.value = "Submitting..."
    submitButtons.disabled = true;

    const formData = new FormData(this);

    const leadData = [];

    const fieldMappings = {
        'firstname': 'FirstName',
        'phone': 'Phone',
        'email': 'EmailAddress',
        'city': 'mx_City',
        'state': 'mx_State',
        'programme': 'mx_Programme',
        'SourceCampaign': 'SourceCampaign',
        'mx_Keyword': 'mx_Keyword',
        'SourceMedium': 'SourceMedium',
        'Source': 'Source',
        'Other_City': 'OtherCity'
    };

    formData.forEach((value, key) => {
        const attribute = fieldMappings[key];

        if (attribute) {
            leadData.push({
                Attribute: attribute,
                Value: value
            });
        }
    });

    fetch('https://api-in21.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r07af9ca93e52abb5cc5c8b841e22bb19&secretKey=5bfd47820e035b5d70f5a9f9c217bd6048f8e88e', {
        method: 'POST',
        body: JSON.stringify(leadData),
        headers: {
            'Content-Type': 'application/json'
        }
    })
        .then(response => response.json())
        .then(data => {
            window.location.href = "https://www.msu.edu.in/thank-you";
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Error submitting lead");
        });
});
