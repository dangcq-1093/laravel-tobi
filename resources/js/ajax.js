let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

let btnBanner = document.getElementById('btn-banner');
let btnSummary = document.getElementById('btn-summary');
let btnDescription = document.getElementById('btn-description');
let btnProgress = document.getElementById('btn-progress');
let btnOutcome = document.getElementById('btn-outcome');
let btnImpact = document.getElementById('btn-impact');


btnBanner.addEventListener('click', updateBanner);
btnSummary.addEventListener('click', updateSummary);
btnDescription.addEventListener('click', updateDescription);
btnProgress.addEventListener('click', updateProgress);
btnOutcome.addEventListener('click', updateOutcome);
btnImpact.addEventListener('click', updateImpact);


let ajaxSuccess = document.getElementById("success-ajax");
let ajaxError = document.getElementById("error-ajax");

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': token
    }
});

function activeLoading(id, btn = null) {
    let loading = document.getElementById(id);
    if (loading) {
        loading.classList.remove('hidden');
    }
    
    if (btn) {
        btn.disabled = true;
    }
}

function disableLoading(id, btn = null) {
    let loading = document.getElementById(id);
    if (loading) {
        loading.classList.add('hidden');
    }

    if (btn) {
        btn.disabled = false;
    }
}

function updateBanner() {
    activeLoading('loading-banner');
    let url = document.getElementById('banner-url').dataset.url;
    let title = document.getElementById('title-banner').innerText;
    let content = document.getElementById('banner-description-content').innerText;
    $.ajax({
        type: "PUT",
        url: url,
        data: {
            title: title,
            description: {
                content: content,
            },
        },
        cache: false,
        success: function(data) {
            disableLoading('loading-banner', btnBanner);
            animate(ajaxSuccess);
        },
        error: function (res) {
            disableLoading('loading-banner', btnBanner);
            animate(ajaxSuccess);
        }
    });
}

function updateSummary() {
    activeLoading('loading-summary');
    let url = document.getElementById('summary-url').dataset.url;
    let content = document.getElementById('summary-description-content').innerText;
    $.ajax({
        type: "PUT",
        url: url,
        data: {
            content,
        },
        cache: false,
        success: function(data) {
            disableLoading('loading-summary', btnBanner);
            animate(ajaxSuccess);
        },
        error: function (res) {
            disableLoading('loading-summary', btnBanner);
            animate(ajaxSuccess);
        }
    });
}

function mapNodeList(nodeList) {
    return Array.from(nodeList).map(function(item) {
        return item.innerText;
    });
}

function updateDescription() {
    activeLoading('loading-description');
    let url = document.getElementById('description-url').dataset.url;
    let titleCard0 = document.getElementById('description-card-0').innerText;
    let titleCard1 = document.getElementById('description-card-1').innerText;
    let titleCard2 = document.getElementById('description-card-2').innerText;
    let titleCard3 = document.getElementById('description-card-3').innerText;
    let content0 = mapNodeList(document.querySelectorAll('.description-card-content-0'));
    let content1 = mapNodeList(document.querySelectorAll('.description-card-content-1'));
    let content2 = mapNodeList(document.querySelectorAll('.description-card-content-2'));
    let content3 = mapNodeList(document.querySelectorAll('.description-card-content-3'));
    $.ajax({
        type: "PUT",
        url: url,
        data: {
            card: [
                { 
                    title: titleCard0,
                    values: content0,
                },
                { 
                    title: titleCard1,
                    values: content1,
                },
                { 
                    title: titleCard2,
                    values: content2,
                },
                { 
                    title: titleCard3,
                    values: content3,
                }
            ]
        },
        cache: false,
        success: function(data) {
            disableLoading('loading-description', btnDescription);
            animate(ajaxSuccess);
        },
        error: function (res) {
            disableLoading('loading-description', btnDescription);
            animate(ajaxError);
        }
    });
}

function updateProgress() {
    activeLoading('loading-progress');
    let url = document.getElementById('progress-url').dataset.url;
    let titleCards = mapNodeList(document.querySelectorAll('.progress-card-title'));
    let noteCards = mapNodeList(document.querySelectorAll('.progress-card-note'));
    let contents = mapNodeList(document.querySelectorAll('.progress-card-content'));
    dataAjax = titleCards.map(function(current, index) {
        return {
            title: current,
            note: noteCards[index],
            content: contents[index],
        };
    });
    $.ajax({
        type: "PUT",
        url: url,
        data: {
            card: dataAjax
        },
        cache: false,
        success: function(data) {
            disableLoading('loading-progress', btnProgress);
            animate(ajaxSuccess);
        },
        error: function (res) {
            disableLoading('loading-progress', btnProgress);
            animate(ajaxError);
        }
    });
}

function updateOutcome() {
    activeLoading('loading-outcome');
    let url = document.getElementById('outcome-url').dataset.url;
    let titleCards = mapNodeList(document.querySelectorAll('.outcome-card-title'));
    let content0 = mapNodeList(document.querySelectorAll('.outcome-card-content-0'));
    let content1 = mapNodeList(document.querySelectorAll('.outcome-card-content-1'));
    let content2 = mapNodeList(document.querySelectorAll('.outcome-card-content-2'));
    let contents = [];
    contents.push(content0, content1, content2);
    let dataAjax = titleCards.map(function(current, index) {
        return {
            title: current,
            content: contents[index],
        };
    });
    $.ajax({
        type: "PUT",
        url: url,
        data: {
            card: dataAjax
        },
        cache: false,
        success: function(data) {
            disableLoading('loading-outcome', btnOutcome);
            animate(ajaxSuccess);
        },
        error: function (res) {
            disableLoading('loading-outcome', btnOutcome);
            animate(ajaxError);
        }
    });
}

function updateImpact() {
    activeLoading('loading-impact');
    let url = document.getElementById('impact-url').dataset.url;
    let contentSection = document.getElementById('impact-description-content').innerText;
    let title = mapNodeList(document.querySelectorAll('.impact-card-title'));
    let contents = mapNodeList(document.querySelectorAll('.impact-card-content'));
    let ajaxCard = title.map(function(current, index) {
        return {
            title: current,
            content: contents[index],
        }
    });
    $.ajax({
        type: "PUT",
        url: url,
        data: {
            content: contentSection,
            card: ajaxCard,
        },
        cache: false,
        success: function(data) {
            disableLoading('loading-impact', btnImpact);
            animate(ajaxSuccess);
        },
        error: function (res) {
            disableLoading('loading-impact', btnImpact);
            animate(ajaxError);
        }
    });
}

