#!/usr/bin/env python
#-*- coding: utf-8 -*-

#: Command input. Can be commanded to publish, repeat, comment on microblogs.
#:   Sandy also accept database command queue. Arguments are given as data
#: fields then.

import argparse
import os
import sys

parser = argparse.ArgumentParser(description="""Sandy controller, a tool
            for publish/comment/repeat... all microblog entries."""
         )
parser.add_argument('action',
                    action='store',
                    help="""<publish|comment|repeat>, describing your intent.

                    If this is <publish> or <comment>, you must specify your
                    content using -c/--content. 

                    To repeat a microblog entry, here is <repeat> and
                    specify the source entry's UUID with -u/--uuid, while
                    -c/--content now is optional and what given will be
                    regarded as your short review on this entry. You may also
                    use -a/--append in this case to make your review as another
                    comment to the referenced entry.
                    """)
parser.add_argument('-c','--content',action='store',dest='content',
                    help="""
                    Your microblog/comment/review here. There is a max length
                    of 140 characters. You may suppress this limit, but some
                    microblog system may not accept such contents.
                    """)
parser.add_argument('-u','--uuid',action='store',dest='uuid',
                    help="""
                    This is the ID specifing your choosen microblog that will
                    be repeated. You may not need to look this up manually,
                    and this option is merely designed for those user
                    interfaces.
                    """)
parser.add_argument('-a','--append',action='store_true',dest='append',
                    help="""
                    When a review is given when repeating an entry, use this
                    option will make your review another comment to the
                    referenced entry. The comment will be sent back to the
                    referenced user then.
                    """)

def parse(argv,stdout='/dev/stdout',stderr='/dev/stderr'):
    so = file(stdout, 'a+')
    se = file(stderr, 'a+', 0)
    os.dup2(so.fileno(), sys.stdout.fileno())
    os.dup2(se.fileno(), sys.stderr.fileno())

    parser.parse(argv.split(" "))


if __name__ == '__main__':
    if len(sys.argv) > 1:
        parse(" ".join(sys.argv[1:]).strip())
    else:
        # provide help info
        parser.print_help()
