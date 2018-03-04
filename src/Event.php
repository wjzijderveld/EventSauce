<?php

namespace EventSauce\EventSourcing;

interface Event
{
    public function timeOfRecording(): PointInTime;

    public function toPayload(): array;

    public static function fromPayload(array $payload, PointInTime $timeOfRecording): Event;
}