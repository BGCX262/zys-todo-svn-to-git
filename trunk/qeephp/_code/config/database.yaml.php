# <?php die(); ?>

## 注意：书写时，缩进不能使用 Tab，必须使用空格

#############################
# 数据库设置
#############################

# devel 模式
devel:
  driver:     mysql
  host:       localhost
  login:      root
  password:   123456
  database:   todo_qeephp
  charset:    utf8
  prefix:     qee

# test 模式
test:
  driver:     mysql
  host:       localhost
  login:      username
  password:   password
  database:   qeephp_test_db
  charset:    utf8
  prefix:

# deploy 模式
deploy:
  driver:     mysql
  host:       localhost
  login:      username
  password:   password
  database:   qeephp_db
  charset:    utf8
  prefix:

