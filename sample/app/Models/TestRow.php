<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // deleted_at 사용시 추가

class TestRow extends Model
{
    use HasFactory;
    use SoftDeletes; // deleted_at 사용시 추가

    // protected $table ='test_rows'; //없을 경우 Class 명이 변경되서 사용됨 (주의: 중간에 대문자가 있으면 '_소문자' 처럼 변경됨)
	// protected $conntection = 'mysql'; //config/database.php 속의 커넥션 설정
	// protected $primaryKey ='id'; //PK필드명 없을 경우 사용할 필드 명. id 가 기본값
	// public $timestamps = 'false'; //Carbon 클래스  사용유무, false 면 문자열로 처리함
	// protected $dates =['due_date','assigned_date']; // Carbon 클래스 적용 필드명, created_at, updated_at 은 자동
	// protected $dateFormat = 'Y-m-d H:i:s'; //날짜형태
	// protected $fillable = ['name','project_id']; //insert, update 할 수 있는 필드를 설정한다.  ['*'] 으로 전체를 풀 수 있다. $garded 와 중복 사용 불가 ->['*'] 는 안된다. 하고 싶으면 $guarded=[]; 를 대신 사용하자
	// protected $guarded= ['id','created_at','updated_at']; //insert, update 할 수 없는 필드를 설정한다. $fillable  와 중복 사용 불가
}

// 주석 처리된 부분을 수동으로 추가한 부분!