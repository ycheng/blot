ls *.json | awk '{print "cat " $1 " | python3 -m json.tool > /dev/null"}'  | sh
