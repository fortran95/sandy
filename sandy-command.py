#!/usr/bin/env python
#-*- coding: utf-8 -*-

#: Command input. Can be commanded to publish, repeat, comment on microblogs.
#:   Sandy also accept database command queue. Arguments are given as data
#: fields then.

def parse(argv):
    pass

if __name__ == '__main__':
    if len(sys.argv) > 1:
        parse(" ".join(sys.argv[1:]).strip())
    else:
        # provide help info
        pass
