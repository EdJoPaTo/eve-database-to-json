#!/bin/bash

scripts=( regions reprocess )

for i in "${scripts[@]}"
do
  php $i.php
done
