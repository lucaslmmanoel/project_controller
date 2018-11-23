$(document).ready(function () {
    $.getJSON("https://api.github.com/repos/lucaslmmanoel/project_controller/issues?state=open", function (issueDados) {
        // Exibindo o elemento marca
        issueDados.forEach(issue => {

            // Exibindo os dados de marca
            $('#issues_opened').append(`
                    <div class="card">
                        <div class="card-header">
                        ${issue.title}
                        </div>
                        <div class="card-body">
                        ${issue.user.login}
                        </div>
                    </div>
            `)
        });
    }); $.getJSON("https://api.github.com/repos/lucaslmmanoel/project_controller/issues?state=closed", function (issueDados) {
        // Exibindo o elemento marca
        issueDados.forEach(issue => {

            // Exibindo os dados de marca
            $('#issues_closed').append(`
                    <div class="card">
                        <div class="card-header">
                        ${issue.title}
                        </div>
                        <div class="card-body">
                        ${issue.user.login}
                        </div>
                    </div>
            `)
        });
    });
});
