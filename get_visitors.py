#!/usr/bin/python
#Jocelin Lee

#Reads and outputs how many ppl have visited the site

file = open('num_visits.txt', 'r')

visitor_num = int(file.readline())

print visitor_num

file.close()
