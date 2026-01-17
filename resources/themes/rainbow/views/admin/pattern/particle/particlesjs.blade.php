<div class="accordion" id="accordionParticle">
    <div class="card">
        <div class="card-header" id="headingNumber">
            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNumber"
                    aria-expanded="true" aria-controls="collapseNumber">Number
            </button>
        </div>

        <div id="collapseNumber" class="collapse show" aria-labelledby="headingNumber" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.number')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingColor">
            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseColor"
                    aria-expanded="false" aria-controls="collapseColor">Color
            </button>
        </div>
        <div id="collapseColor" class="collapse" aria-labelledby="headingColor" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.color')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingShape">
            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseShape"
                    aria-expanded="false" aria-controls="collapseShape">Shape
            </button>
        </div>
        <div id="collapseShape" class="collapse" aria-labelledby="headingShape" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.shape')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingSize">
            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSize"
                    aria-expanded="false" aria-controls="collapseSize">Size
            </button>
        </div>
        <div id="collapseSize" class="collapse" aria-labelledby="headingSize" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.size')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingOpacity">
            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOpacity"
                    aria-expanded="false" aria-controls="collapseOpacity">Opacity
            </button>
        </div>
        <div id="collapseOpacity" class="collapse" aria-labelledby="headingOpacity" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.opacity')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingLineLinked">
            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLineLinked"
                    aria-expanded="false" aria-controls="collapseLineLinked">line_linked
            </button>
        </div>
        <div id="collapseLineLinked" class="collapse" aria-labelledby="headingLineLinked" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.line_linked')
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingMove">
            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMove"
                    aria-expanded="false" aria-controls="collapseMove">Move
            </button>
        </div>
        <div id="collapseMove" class="collapse" aria-labelledby="headingMove" data-bs-parent="#accordionParticle">
            <div class="card-body">
                @includeIf('admin.pattern.particle.move')
            </div>
        </div>
    </div>
</div>
