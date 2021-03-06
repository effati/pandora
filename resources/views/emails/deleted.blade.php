@extends('emails.master')

@section('title', 'Nya bokningsförfrågan för ' . $entity->name)

@section('content')
<p style="margin:0;padding:0;border:0">Hej!</p>
<br/>
<p style="margin:0;padding:0;border:0">
    Nedanstående bokning har <b>tagits bort</b> för {{ $entity->name }}. Tiden är alltså avbokad.
</p>
<br/>
@if (isset($entity->reason) && strlen($entity->reason) > 0)
<p style="margin:0;padding:0;border:0">
    <b>Anledning:</b> {{ $entity->reason }}
</p>
<br/>
@endif
<table border="0" cellspacing="0" cellpadding="0" style="width:100%">
    <tr>
        <td>Bokningens start: </td>
        <td> {{ $event->start }}</td>
    </tr>
    <tr>
        <td>Bokningens slut: </td>
        <td> {{ $event->end }}</td>
    </tr>
    <tr>
        <td>Av vem: </td>
        <td> {{ $event->title }}</td>
    </tr>
    <tr>
        <td>Anledning för bokning: </td>
        <td> {{ $event->description }}</td>
    </tr>
    @if ($entity->alcohol_question)
    <tr>
        <td>Servering av alkohol: </td>
        <td> {{ $event->alcohol ? 'Ja' : 'Nej' }}</td>
    </tr>
    @endif
    <tr>
        <td>Bokat av: </td>
        <td> {{ $event->author->name }} ({{ $event->author->kth_username }}@kth.se)</td>
    </tr>
    <tr>
        <td>Bokning skapad: </td>
        <td> {{ $event->created_at }}</td>
    </tr>
    <tr>
        <td>Status: </td>
        <td> Avbokad</td>
    </tr>
</table>
<br/>
<p style="margin:0;padding:0;border:0">
    Hälsningar (om datorer hade känslor),
</p>
<br/>
<p style="margin:0;padding:0;border:0">
    Datasektionens bokningssystem
</p>
@endsection