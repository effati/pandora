{!! Form::open(['url' => '/bookings/' . $entity->id . '/book']) !!}

    @if (!isset($close) || $close)
        <a class="close" href="" id="closedialog">Stäng</a>
    @endif

    <h1>Boka {{ $entity->name }}</h1>
    <div class="form">
        <div class="form-entry">
            <span class="description">
                Startdatum och -tid för bokning:
            </span>
            {!! Form::input('date', 'startdate', null, ['id' => 'startdate']) !!}
            {!! Form::input('time', 'starttime') !!}
            <div class="clear"></div>
        </div>
        <div class="form-entry">
            <span class="description">
                Slutdatum och -tid för bokning:
            </span>
            {!! Form::input('date', 'enddate') !!}
            {!! Form::input('time', 'endtime') !!}
            <div class="clear"></div>
        </div>
        <div class="form-entry">
            <span class="description">
                Vem bokar?
            </span>
            {!! Form::text('booker', null, ['placeholder' => 'Nämnd/Sektion/Person']) !!}
            <span class="hint">(du bokar genom {{ Auth::user()->name }})</span>
        </div>
        <div class="form-entry">
            <span class="description">
                Anledning för bokning:
            </span>
            {!! Form::text('reason', null, ['placeholder' => 'T.ex. "Vi ska ha en fiskdammstävling."']) !!}
        </div>
        @if ($entity->alcohol_question)
        <div class="form-entry">
            <span class="description">
                Kommer det serveras alkohol?
            </span>
            <div class="horizontal">
                <div class="radio">
                    {!! Form::radio('alcohol', 'yes', false, ['id' => 'alc']) !!} <label for="alc">Ja</label>
                </div>
                <div class="radio">
                    {!! Form::radio('alcohol', 'no', true, ['id' => 'noalc']) !!} <label for="noalc">Nej</label>
                </div>
            </div>
        </div>
        @endif
        <div class="form-entry">
            {!! Form::submit('Skapa bokningsförfrågan', ['class' => 'theme-color', 'id' => 'save-booking']) !!}
            <div>Genom att trycka på knappen ovan godkänner du att automatiska e-postmeddelanden skickas till dig för att uppdatera dig om din bokning.</div>
        </div>
    </div>
{!! Form::close() !!}