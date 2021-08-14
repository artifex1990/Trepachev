<?php
    class DatabaseShell
    {
        private $mysqli;
		
		public function __construct($host, $user, $password, $database)
		{
			$this->mysqli = new mysqli($host, $user, $password, $database);
			$this->mysqli->query("SET NAMES 'utf8'"); // устанавливаем кодировку
		}
		
		public function save($table, $typeData, $data)
		{
			$templateStringForTable = substr(str_repeat('?,', strlen($typeData)), 0, -1);
			$data = array_merge(["INSERT INTO {$table} VALUES ({$templateStringForTable})", $typeData], $data);
			$result = call_user_func_array([$this, 'execute'], $data);

			return $result->affected_rows;
		}
		
		public function del($table, $fieldNameId, $id)
		{
			$result = $this->execute("DELETE FROM {$table} WHERE {$fieldNameId} = ?", 'i', $id);

			return $result->affected_rows;
		}
		
		public function delAll($table, $fieldNameId, $ids)
		{
			$queryParam = substr(str_repeat('?,', count($ids)), 0, -1);
			$typeParam = str_repeat('i', count($ids));
			$ids = array_merge(["DELETE FROM {$table} WHERE {$fieldNameId} IN ($queryParam)", $typeParam], $ids);
			$result = call_user_func_array([$this, 'execute'], $ids);

			return $result->affected_rows;
		}
		
		public function get($table, $fieldNameId, $id)
		{
            $result = $this->execute("SELECT * FROM {$table} WHERE {$fieldNameId} = ?", 'i', $id)->get_result()->fetch_assoc(MYSQLI_ASSOC);

            return $result ?? null;
		}
		
		public function getAll($table, $fieldNameId, $ids)
		{
			$queryParam = substr(str_repeat('?,', count($ids)), 0, -1);
			$typeParam = str_repeat('i', count($ids));
			$ids = array_merge(["SELECT * FROM {$table} WHERE {$fieldNameId} IN ($queryParam)", $typeParam], $ids);
			$result = call_user_func_array([$this, 'execute'], $ids)->get_result()->fetch_all(MYSQLI_ASSOC);

            return $result ?? null;
		}
		
		public function selectAll($table, $condition)
		{
			$keysWhere = implode(' = ? AND ', array_keys($condition)) . ' = ?';
			$typeArguments = str_repeat('s', count($condition));
			$query = "SELECT * FROM {$table} WHERE {$keysWhere}";
			$data = array_merge([$query, $typeArguments], array_values($condition));
			$result = call_user_func_array([$this, 'execute'], $data)->get_result()->fetch_all(MYSQLI_ASSOC);

			return $result ?? null;
		}

        private function execute($query, $typeParam, &...$param) 
        {
            $stmt = $this->mysqli->prepare($query);
			array_unshift($param, $typeParam);
			call_user_func_array([$stmt, 'bind_param'], $param);
            $stmt->execute();

			if ($stmt->error !== '') {
				throw new Exception($stmt->error);
			}

            return $stmt;
        }


    }