<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Reverse Polish Notation Calculator
        </h1>
    </div>
</div>

<div class="row">

    <div class="col-md-8">
        <form method="post" accept-charset="utf-8" action="">
            <input type="text" name="calculatorInput" id="calculatorInput" value="<?= set_value('calculatorInput')?>" />
            <input type="submit" value="Calculate" />
        </form>
        <br />
        <p>The form validated <?=$validationSuccess?></p>
    </div>

    <div class="col-md-4">
        <h3>Project Description</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3>Project Details</h3>
        <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
        </ul>
    </div>

</div>