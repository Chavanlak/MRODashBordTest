# Module Function
# 1 fuction update status/datetime การรับของ ยังไม่ได้รับ->รับเเล้ว ReciveStateFromBranch/dateReceiveFromBranch
# 2 function update status/datetime การดำเนินงานของซัพพลายเออร์  ส่งซัพ/เเจ้งซัพ-> ส่งเเล้ว/เเจ้งเเล้วSupplierState/dateSenttoSubplier
# 3 function update status/datetime กรณีที่ซัพดำเนินงานเสร็จเรียบร้อย กดปุ่มดำเนินการสำเร็จ เเล้วบันทึก
# 4 function การบันทึกการตามงานของซัพพลายเออร์
# 5 function update status/datetime การดำเนินงานของช่าง store เเจ้งวันนที่ดำเนินการเเละสถานะการดำเนินการ
# 6 function update staus/datetime ช่างดำเนินการเรียบร้อยให้กดเสร็จงาน เเล้วบันทึกเพื่อปิดงาน
# 7 function save งานของช่าง
# 8 function การปิดงานจากหน้าร้าน เมื่อหน้าร้านได้รับของเเล้วให้ดำเนินการปิดงาน เเละวันที่ได้รับของ dateJobReturnToBranch/StatusJobClosed
# 8.1 เช็คเงื่อนไข การปิดงาน  #3
# 8.2 เช็คเงื่อนไข การปิดงาน  #6

# case special
# ถ้าของซ่อมไม่ได้ หรือ sup ซ่อมนาน ให้ทำการซื้อใหม่ น่าจะอยู่ใน module ที่ 3
