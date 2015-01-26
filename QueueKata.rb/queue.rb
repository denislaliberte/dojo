class Queue
  def initialize
    @count = 0
  end
  def empty
    @count == 0
  end
  def push(item)
    @count += 1
    @item = item
  end
  def pop()
    @count -= 1
    temp = @item
    @item = nil
    temp
  end
end

