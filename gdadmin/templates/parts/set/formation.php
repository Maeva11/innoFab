<?php $el = @$data['datas']; ?>
<div class="card col-10 offset-1">
    <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
            <div class="nav-tabs-wrapper">
                <span class="nav-tabs-title">Formation</span>
                <ul class="nav nav-tabs float-right">
                    <li class="nav-item mr-3"><a class="nav-link active" href="javascript:history.go(-1)" ><i class="fas fa-arrow-left"></i> Retour</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane active">
                <form class="row" method="post" enctype="multipart/form-data">
                <?= Tools::generateInput("text", "Titre", "title", @$el->{"title"._PREFIX_LANG_}, "col-12"); ?>
                <?= Tools::generateInput("textarea", "Résumé", "description", @$el->{"description"._PREFIX_LANG_}, "col-6"); ?>
                <?= Tools::generateInput("file", "Illustration", "image", @$el->image, 'col-6'); ?>
                <?= Tools::generateInput("radio", "Publié ?", "active", @$el->active, 'col-6', '', ['oui'=> 1, 'non'=>0]); ?>
                <?= Tools::generateInput("hidden", "", "id", @$el->id); ?>
                <?= Tools::generateInput("submit", "", "", "Valider", "btn-style2 float-right"); ?>
                </form>
            </div>
        </div>
    </div>
</div>
