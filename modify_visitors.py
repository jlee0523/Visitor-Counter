#!/usr/bin/python

#modifies the file storing the number of visitors to the page

file = open('num_visits.txt', 'r')

visitor_num = int(file.readline()) + 1

file.close()

file = open('num_visits.txt', 'w')

#write back into the file
file.write(str(visitor_num))

#close file
file.close()
