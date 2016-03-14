#!/usr/bin/perl
use strict;
use warnings;
use feature qw/say/;

my $dir1="/data/www/subwww/liudonghua/";
my $dir2="/data/home/projects/myblog/";
my $dir3="/data/www/subwww/dashang_ho_test/";
my $dir_fs_1="/data/www/subwww/dashang_upload/";
my $dir_fs_2="/data/home/projects/tippingcloud/upload_server/";

my @objs = (
		[$dir1."wp-content/themes/twentyhua", $dir2."twentyhua", "diff -r"],
		[$dir1."wp-content/themes/twentyhua", $dir2."twentyhua", "Only in"],
	);

for( my $i = 0; $i < @objs; $i++){
	my $cmd = "diff -r $objs[$i][0] $objs[$i][1] | grep \"$objs[$i][2]\"";
	#print "Command: $cmd\n";
	print `$cmd`;
}

